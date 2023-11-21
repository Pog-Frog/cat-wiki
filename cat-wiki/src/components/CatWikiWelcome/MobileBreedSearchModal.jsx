// MobileBreedSearchModal.js
import React from 'react';
import styled from 'styled-components';

const ModalContainer = styled.div`
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  justify-content: center;
  align-items: center;
`;

const ModalContent = styled.div`
  background: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  width: 80%;
`;

const CloseButton = styled.span`
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
`;

const OptionsList = styled.ul`
  list-style: none;
  padding: 0;
  margin: 0;
`;

const OptionItem = styled.li`
  padding: 10px;
  margin: 5px;
  cursor: pointer;
  background-color: #f0f0f0;
  border-radius: 4px;

  &:hover {
    background-color: #e0e0e0;
  }
`;

export const MobileBreedSearchModal = ({ catBreeds, handleClick, closeModal }) => {
  return (
    <ModalContainer>
      <ModalContent>
        <CloseButton onClick={closeModal}>&times;</CloseButton>
        <OptionsList>
          {catBreeds.map((catBreed, index) => (
            <OptionItem key={index} onClick={() => handleClick(catBreed)}>
              {catBreed}
            </OptionItem>
          ))}
        </OptionsList>
      </ModalContent>
    </ModalContainer>
  );
};