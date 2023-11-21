import { createGlobalStyle } from 'styled-components'

export const GlobalStyles = createGlobalStyle`
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  
  html {
    display: flex;
    justify-content: center;
  }

  body {
    margin: 0;
    font-family: 'Montserrat';
    font-style: normal;
    max-width: 1248px;
    width: 100%;
    min-height: 100vh;

    &::-webkit-scrollbar {
      width: 0.5rem;
    }

    &::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    &::-webkit-scrollbar-thumb {
      background: #888;
    }

    @media (max-width: 768px) {
      max-width: 95%;
    }
  }

  input {
    border: none;
    outline: none;
    font-family: 'Montserrat';
    font-style: normal;
  }
`
