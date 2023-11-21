import styled from 'styled-components'

const ScrollBarStyles = `
  &::-webkit-scrollbar {
    -webkit-appearance: none;
  }

  &::-webkit-scrollbar:vertical {
    width: 10px;
  }

  &::-webkit-scrollbar-button:increment,
  &::-webkit-scrollbar-button {
    display: none;
  }

  &::-webkit-scrollbar:horizontal {
    height: 10px;
  }

  &::-webkit-scrollbar-thumb {
    background-color: #797979;
    border-radius: 20px;
    border: 2px solid #797979;
  }

  &::-webkit-scrollbar-track {
    border-radius: 10px;
  }
`

export const CatBreedOptionsContainer = styled.section`
  position: absolute;
  top: calc(100% + 17px);
  color: white;
  width: 394.62px;
  height: 219.72px;
  left: 0;
  background: #ffffff;
  border-radius: 24px;
  padding: 15px 0 15px 25px;

  div {
    position: relative;
    color: black;
    top: 0;
    left: 0;
    overflow-y: scroll;
    overflow-x: hidden;
    width: 100%;
    height: 100%;

    div {
      width: 360.01px;
      height: 56.16px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      padding: 0 0 0 15px;

      &:hover {
        background: rgba(151, 151, 151, 0.1);
      }
    }

    ${ScrollBarStyles}
  }
`
