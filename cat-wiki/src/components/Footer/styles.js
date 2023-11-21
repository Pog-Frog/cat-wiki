import styled from 'styled-components'

export const FooterContainer = styled.footer`
  width: 100%;
  height: 108.86px;
  background: #000000;
  border-radius: 42px 42px 0 0;

  div {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 32.43px 0 108px;

    span {
      color: #fff;

      a {
        color: #fff;
      }
    }
  }

  @media (max-width: 768px) {
    height: 150px;

    div {
      padding: 0;
      flex-direction: column;
      justify-content: center;
    }
  }
`
