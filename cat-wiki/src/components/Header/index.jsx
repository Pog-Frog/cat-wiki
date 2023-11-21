import { Link } from 'react-router-dom'
import { CatWikiLogo } from '../CatWikiLogo'
import { HeaderContainer } from './styles'

export const Header = () => {
  return (
    <HeaderContainer>
      <Link to='/'>
        <CatWikiLogo fill={'#291507'} />
      </Link>
    </HeaderContainer>
  )
}
