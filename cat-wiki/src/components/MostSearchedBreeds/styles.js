import styled from 'styled-components'

export const MostSearchedBreedsContainer = styled.div`
  height: 600px;
  position: relative;
  background-color: #e3e1dc;
  border-radius: 0 0 42px 42px;
  padding: 50px 107px 98px 108px;
  cursor: default;

  @media (max-width: 768px) {
    padding: 50px 29px 63px 29px;
    height: auto;
  }
`

export const MostSearched = styled.div`
  h2 {
    font-weight: 500;
    font-size: 18px;
    line-height: 22px;
    color: #291507;
    cursor: pointer;
  }

  div {
    width: 59.18px;
    height: 3.21px;
    background-color: #4d270c;
    margin-top: 8px;
  }

  margin-bottom: 36px;
`

export const DiscoveredContainer = styled.div`
  font-weight: 700;
  display: flex;
  align-items: center;
  justify-content: space-between;

  h1 {
    width: 536.93px;
    height: 118px;
    font-size: 48px;
    line-height: 59px;
    color: #291507;
  }

  div {
    font-size: 18px;
    line-height: 22px;
    text-align: right;
    color: rgba(41, 21, 7, 0.6);
    display: flex;
    align-items: center;
    cursor: pointer;

    span {
      margin-left: 10px;
    }
  }

  @media (max-width: 768px) {
    div {
      display: none;
    }
  }
`

export const BreedsContainer = styled.div`
  display: flex;
  width: 100%;
  justify-content: space-between;
  margin-top: 46px;
  position: relative;

  .box {
    position: absolute;
    left: -14px;
    z-index: 0;
    top: 31.41px;
    width: 46.96px;
    height: 174.62px;
    background: #dec68b;
    border-radius: 14px;
  }

  div {
    position: sticky;

    img {
      width: 220px;
      height: 220px;
      object-fit: cover;
      border-radius: 24px;
      z-index: 100;
    }

    p {
      font-weight: 600;
      font-size: 18px;
      line-height: 22px;
      margin-top: 20px;
      color: #291507;
    }
  }

  @media (max-width: 768px) {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    row-gap: 20px;
    column-gap: 20px;

    .box {
      display: none;
    }
  }
`
