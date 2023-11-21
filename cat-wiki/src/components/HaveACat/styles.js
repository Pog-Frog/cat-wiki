import styled from 'styled-components'

export const HaveACatContainer = styled.div`
  height: 600px;
  width: 100%;
  position: relative;
  padding: 50px 107px 98px 108px;
  margin-top: 100px;
  cursor: default;
  display: flex;
  justify-content: space-between;
  margin-bottom: 75px;
  align-items: center;

  @media (max-width: 768px) {
    flex-direction: column;
    padding: 0px 29px 98px 29px;
    height: auto;
  }
`

export const Information = styled.div`
  max-width: 447.74px;
  width: 100%;

  h1 {
    font-weight: 700;
    font-size: 48px;
    line-height: 59px;
    width: 430.02px;
    color: #291507;
    margin-bottom: 42px;
  }

  p {
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #291507;
  }

  div {
    width: 67.15px;
    height: 3.21px;
    background: #4d270c;
    border-radius: 77px;
    margin-bottom: 17px;
  }

  section {
    cursor: pointer;
    display: flex;
    height: 22px;
    font-weight: 700;
    font-size: 18px;
    line-height: 22px;
    color: rgba(41, 21, 7, 0.6);
    margin-top: 66px;

    span {
      margin-left: 10px;
    }
  }

  @media (max-width: 768px) {
    max-width: none;
    width: 100%;

    h1 {
      width: 100%;
    }

    p {
      width: 100%;
    }
  }
`

export const Masonry = styled.div`
  max-width: 539px;
  display: flex;
  justify-content: space-between;
  width: 100%;

  div {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
  }

  img {
    border-radius: 24px;
    object-fit: cover;
    width: 100%;
  }

  #firstImg {
    margin-right: 30px;
    margin-bottom: 30px;
    width: 273px;
  }

  #secondImg {
    margin-right: 30px;
    width: 195px;
  }

  #thirdImg {
    width: 238px;
    height: 385px;
  }

  @media (max-width: 768px) {
    max-width: none;
    width: 100%;
    flex-direction: column;
    padding: 0px 29px;

    div {
      width: 100%;
      margin-top: 63px;
    }

    #firstImg,
    #secondImg,
    #thirdImg {
      width: 100%;
      height: auto;
      margin: 0px;
      margin-bottom: 30px;
    }
  }
`
