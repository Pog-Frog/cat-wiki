import { CatBreedOptionsContainer } from './styles'

export const Options = ({
  catBreeds = [],
  handleClick = () => {},
  searchValue = '',
  isMobileMode = false,
}) => {
  const catBreedsFiltered = catBreeds.filter((catBreed) =>
    catBreed.toLowerCase().includes(searchValue.toLowerCase())
  )

  return (
    <CatBreedOptionsContainer>
      <div>
        {catBreedsFiltered.map((catBreed, index) => {
          return (
            <div key={index} onClick={() => handleClick(catBreed)}>
              {catBreed}
            </div>
          )
        })}
      </div>
    </CatBreedOptionsContainer>
  )
}
