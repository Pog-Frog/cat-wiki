
import {
  MostSearchedBreedsContainer,
  MostSearched,
  DiscoveredContainer,
  BreedsContainer,
} from './styles'
import Skeleton, { SkeletonTheme } from 'react-loading-skeleton'
import 'react-loading-skeleton/dist/skeleton.css'
import { useNavigate } from 'react-router-dom'

export const MostSearchedBreeds = ({ cats = [], isLoading }) => {
  const array = [1, 2, 3, 4]
  const navigate = useNavigate()

  const getCatBreedPage = (catBreed) => {
    navigate(`/cats/breed/${catBreed.name}`, { state: { catBreed } })
  }

  const getTopBreeds = () => {
    navigate(`/cats/topbreeds`)
  }

  
  return (
    <MostSearchedBreedsContainer>
      <MostSearched>
        <h2>Most Searched Breeds</h2>
        <div />
      </MostSearched>

      <DiscoveredContainer>
        <h1>66+ Breeds For you to discover</h1>

        <div onClick={getTopBreeds}>
          SEE MORE
          <span className='material-icons-outlined'>arrow_right_alt</span>
        </div>
      </DiscoveredContainer>

      <BreedsContainer>
        <div className='box' />
        {isLoading ? (
          <SkeletonTheme
            baseColor='#ccc7c7'
            highlightColor='#7a7a7a'
            borderRadius={24}
          >
            {array.map((value) => {
              return (
                <div key={value}>
                  <Skeleton width={220} height={220} />
                  <p>
                    <Skeleton />
                  </p>
                </div>
              )
            })}
          </SkeletonTheme>
        ) : (
          cats.map((catBreed) => {
            const {
              name,
              id,
              imageUrl,
            } = catBreed;
            const uniqueKey = `${id}-${imageUrl}`;
          
            return (
              <div key={uniqueKey} onClick={() => getCatBreedPage(catBreed)}>
                <img src={imageUrl} alt={name} />
                <p>{name}</p>
              </div>
            );
          })
        )}
      </BreedsContainer>
    </MostSearchedBreedsContainer>
  )
}
