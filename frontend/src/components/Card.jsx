import PropTypes from 'prop-types';
import '../styles/Card.css';
import { Heart } from 'lucide-react';

function Card({ project }) {
  const {
    nome, municipio, uf, resumo, valorAprovado, valorCaptado,
  } = project;

  const formatCurrency = (value) => new Intl.NumberFormat('pt-BR', {
    style: 'currency',
    currency: 'BRL',
  }).format(value);

  return (
    <div className="card">
      <span className="badge">ROUANET</span>
      <p id="title" className="card-title">
        {nome}
      </p>
      <p className="card-location">
        {municipio}
        {' '}
        •
        {' '}
        {uf}
      </p>
      <p className="card-summary">
        {resumo}
      </p>
      <div className="card-values">
        <div className="value-item">
          <span className="label">
            Aprovado
          </span>
          <span className="value-amount">
            {formatCurrency(valorAprovado)}
          </span>
        </div>
        <div className="value-item">
          <span className="label">
            Captado
          </span>
          <span className="value-amount">
            {formatCurrency(valorCaptado)}
          </span>
        </div>

      </div>
      <div />
      <div className="card-footer">
        <button type="button" className="add-button">ADICIONAR</button>
        <div className="favorite">
          <Heart color="#aaa" strokeWidth="1.5" />
        </div>
      </div>
    </div>
  );
}

export default Card;

Card.propTypes = {
  project: PropTypes.shape({
    nome: PropTypes.string.isRequired,
    uf: PropTypes.string.isRequired,
    municipio: PropTypes.string.isRequired,
    valorCaptado: PropTypes.string.isRequired,
    valorAprovado: PropTypes.string.isRequired,
    resumo: PropTypes.string.isRequired,
  }).isRequired,
};
