import styled from 'styled-components'

export const StyledBreedInfoContainer = styled.section`
  display: flex;
  width: 100%;
  height: 100%;
  justify-content: space-around;

  @media (max-width: 768px) {
    flex-direction: column;
  }
`



export const ImgContainer = styled.div`
  max-width: 371.04px;
  max-height: 371.04px;
  position: relative;

  img {
    width: 100%;
    height: 100%;
    border-radius: 24px;
    object-fit: cover;
  }

  div {
    position: absolute;
    z-index: -1;
    width: 83.64px;
    height: 305.12px;
    left: -14px;
    top: 31.41px;
    background: #dec68b;
    border-radius: 14px;
  }

  @media (max-width: 768px) {
    max-width: 100%;
    max-height: none;
    display: flex;
    justify-content: center;

    div {
      display: none;
    }

    img {
      width: 95%;
    }
  }
`
