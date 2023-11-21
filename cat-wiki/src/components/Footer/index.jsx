import { FooterContainer } from './styles'
import { CatWikiLogo } from '../CatWikiLogo'

export const Footer = () => {
  return (
    <FooterContainer>
      <div>
        <CatWikiLogo fill='#FFFFFF' />

        <span>
          created by{' '}
          <strong>
            <a
              href='https://github.com/Pog-Frog'
              rel='noreferrer'
              target='_blank'
            >
              @PogFrog
            </a>
          </strong>{' '}
          - DevChallenges{''}
        </span>
      </div>
    </FooterContainer>
  )
}
