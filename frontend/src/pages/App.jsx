import React from 'react';
import '../styles/App.css';
import { useQuery } from '@tanstack/react-query';
import { getProjects } from '../services/api';
import CardCarousel from '../components/ui/carousel/CardCarousel';

function App() {
  const {
    isLoading, isError, data: projects, error,
  } = useQuery({ queryKey: ['projects'], queryFn: getProjects });
  if (isLoading) {
    return <span>Loading...</span>;
  }

  if (isError) {
    return (
      <span>
        Error:
        {error.message}
      </span>
    );
  }

  return (
    <div className="App">
      <h2 className="section-title">Ver outros Projetos Proponentes</h2>
      <div className="cards">
        <CardCarousel
          slides={projects}
          options={{ dragFree: true }}
        />
      </div>

    </div>
  );
}

export default App;
