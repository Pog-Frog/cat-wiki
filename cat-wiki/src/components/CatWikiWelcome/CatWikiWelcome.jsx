import { CatWikiWelcomeContainer, BreedSearcherForm } from './styles'
import CatLG from '../../assets/HeroImagelg.png'
import CatWikiLogo from '../../assets/CatwikiLogo.svg'
import { useState } from 'react'
import { Options } from '../CatBreedOptions/Options'
import { useNavigate } from 'react-router-dom'
import axios from 'axios'

export const CatWikiWelcome = ({ cats }) => {
  const [isSearching, setIsSearching] = useState(false)
  const [searchValue, setSearchValue] = useState('')
  const navigate = useNavigate()
  const mobileDisplayRes = 768;
  const [isMobileMode, setIsMobileMode] = useState(false);
  function detectWidthChanges() {
    const width = document.documentElement.clientWidth;
    setIsMobileMode(width < mobileDisplayRes);
  }

  window.addEventListener('resize', detectWidthChanges);

  const catsBreedsNames = cats?.reduce((acc, curr) => {
    acc.push(curr.name)
    return acc
  }, [])

  const handleClick = (catBreed) => {
    setSearchValue(catBreed)
    setIsSearching(false)
    const catName = cats.find((cat) => cat.name === catBreed).name
    axios
      .post(`http://127.0.0.1:8000/api/cats/rank?name=${catName}`).then(() => {
        navigate(`/cats/breed/${catBreed}`, {
          state: {
            catBreed: cats.find((cat) => cat.name === catBreed),
          },
        })
      })
  }

  const handleChange = (e) => {
    const { value } = e.target
    setSearchValue(value)
  }
  const handleIsSearchingMobile = () => { 
    setIsSearching(!isSearching)

  }

  return (
    <>
      <CatWikiWelcomeContainer>
        <img src={CatLG} alt='' />

        <div>
          <img src={CatWikiLogo} alt='' />
          <p>Get to know more about your cat breed</p>
          {!isMobileMode && (
            <BreedSearcherForm onClick={() => setIsSearching(!isSearching)}>
              <input
                type='text'
                placeholder={
                  window.innerWidth > 768 ? 'Enter your breed' : 'Search'
                }
                onChange={handleChange}
                value={searchValue}
              />
              <span className='material-icons-outlined'>search</span>
              {isSearching && catsBreedsNames.length && (
                <Options
                  catBreeds={catsBreedsNames}
                  handleClick={handleClick}
                  searchValue={searchValue}
                  isMobileMode={isMobileMode}
                />
              )}
            </BreedSearcherForm>
          )}
          {isMobileMode && (<BreedSearcherForm onClick={handleIsSearchingMobile}>
            <input
              type='text'
              placeholder={
                window.innerWidth > 768 ? 'Enter your breed' : 'Search'
              }
              onChange={handleChange}
              value={searchValue}
            />
            <span >search</span>
            {isSearching && catsBreedsNames.length && (
              <Options
                catBreeds={catsBreedsNames}
                handleClick={handleClick}
                searchValue={searchValue}
                isMobileMode={isMobileMode}
              />
            )}

          </BreedSearcherForm>)}
        </div>
      </CatWikiWelcomeContainer>
    </>
  )
}