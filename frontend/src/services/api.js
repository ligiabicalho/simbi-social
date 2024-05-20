import api from '../utils';

export const getProjects = async () => {
  try {
    const response = await api.get('/project/all');
    return response.data;
  } catch (error) {
    console.log('Erro ao buscar dados:', error);
    throw error;
  }
};

export default getProjects;
