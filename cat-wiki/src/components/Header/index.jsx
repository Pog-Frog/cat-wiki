import { Link } from 'react-router-dom';
import { CatWikiLogo } from '../CatWikiLogo';

export const Header = () => {
  const linkStyles = {
    fontWeight: 500,
    fontSize: '18px',
    lineHeight: '22px',
    color: '#291507',
    textDecoration: 'none',
  };

  return (
    <div style={{ position: 'relative', marginTop: '1rem', marginBottom:'1rem' }}>
      <Link to='/'>
        <CatWikiLogo fill={'#291507'} />
      </Link>
      <div style={{ position: 'absolute', top: '10px', right: '10px' }}>
        <a href='http://127.0.0.1:8000/' target='_blank' style={linkStyles} rel="noreferrer">
          <p>Admin Login</p>
        </a>
      </div>
    </div>
  );
};