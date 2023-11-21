import { BreedInfoContainer } from '../containers/BreedInfoContainer'
import { useLocation } from 'react-router-dom'
import { useEffect } from 'react'

export const CatBreedInfoPage = () => {
  useEffect(() => {
    window.scrollTo(0, 0)
  }, [])

  const { state } = useLocation()
  const { catBreed } = state

  return (
    <div>
      <BreedInfoContainer {...catBreed} />
    </div>
  )
}
