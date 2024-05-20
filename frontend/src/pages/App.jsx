import React from 'react';
import '../styles/App.css';
import { useQuery } from '@tanstack/react-query';
import { getProjects } from '../services/api';
import CardCarousel from '../components/ui/carousel/CardCarousel';

function App() {
  const {
    isLoading, isError, data: projects, error,
  } = useQuery({ queryKey: ['projects'], queryFn: getProjects });

  return (
    <div className="App">
      <h2 className="section-title">Ver outros Projetos Proponentes</h2>
      <div className="cards">
        {isLoading && <span>Carregando...</span>}
        {isError && (
        <span>
          {error?.message}
          :
          {' '}
          Oops! Algo deu errado, tente novamente. Se persistir, contacte o suporte.
        </span>
        )}
        {projects && (
        <CardCarousel
          slides={projects}
          options={{ dragFree: true }}
        />
        )}
      </div>

    </div>
  );
}

export default App;
