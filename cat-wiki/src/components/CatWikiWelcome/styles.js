import styled from 'styled-components'

export const CatWikiWelcomeContainer = styled.div`
  height: 600px;
  position: relative;

  img {
    border-radius: 42px 42px 0 0;
    height: 100%;
    object-fit: cover;
    width: 100%;
  }

  div {
    position: absolute;
    z-index: 1;
    color: white;
    top: 115px;
    left: 108px;
    width: 394.6px;

    img {
      border-radius: 0 0 0 0;
      margin-bottom: 11px;
    }

    p {
      font-weight: 500;
      font-size: 24px;
      line-height: 29px;
      width: 371.3px;
      color: #ffffff;
      margin-bottom: 52px;
    }

    @media (max-width: 768px) {
      top: 21px;
      left: 29px;
      width: 50%;

      img {
        width: 50%;
      }

      p {
        margin-bottom: 20px;
      }
    }
  }

  @media (max-width: 768px) {
    height: 250px;
  }
`

export const BreedSearcherForm = styled.form`
  width: 100%;
  height: 69.67px;
  position: relative;
  cursor: pointer;

  input {
    width: 100%;
    height: 100%;
    background: #ffffff;
    border-radius: 59px;
    padding-left: 28.6px;
    font-size: 18px;
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    cursor: pointer;
  }

  span {
    position: absolute;
    height: 100%;
    top: 0;
    right: 28.6px;
    width: 28.6px;
    display: flex;
    align-items: center;
    color: #291507;
  }
`
