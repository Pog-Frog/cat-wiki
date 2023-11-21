import styled from 'styled-components'

export const CatBreedContainer = styled.section`
  width: 601px;

  h1 {
    font-weight: 600;
    font-size: 36px;
    line-height: 44px;
    color: #291507;
  }

  .description {
    margin-top: 25px;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #291507;
  }

  p {
    font-size: 16px;
    line-height: 20px;
    margin: 32px 0;
  }

  span {
    font-weight: 700;
    color: #000000;
  }

  .stuffed {
    display: flex;
    margin-bottom: 32px;

    span {
      width: 148px;
      margin-right: 30px;
    }
  }

  @media (max-width: 768px) {
    width: 100%;
    height: auto;
    padding: 0 29px;
    margin-top: 25px;

    .stuffed {
      flex-direction: column;

      span {
        margin-bottom: 15px;
      }
    }
  }
`
