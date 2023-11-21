import { HashRouter, Route, Routes } from 'react-router-dom'
import { GlobalStyles } from '../styles/GlobalStyles'
import { Layout } from '../containers/Layout'
import { HomePage } from '../pages/HomePage'
import { CatBreedInfoPage } from '../pages/CatBreedInfoPage'
import { TopBreeds } from '../pages/topTenPage'

export const App = () => {
  return (
    <HashRouter>
      <GlobalStyles />
      <Layout>
        <Routes>
          <Route path='/' element={<HomePage />} />
          <Route path='/cats/breed/:breed' element={<CatBreedInfoPage />} />
          <Route path='/cats/topbreeds' element={<TopBreeds />} />
          <Route path='*' element={<HomePage />} />
        </Routes>
      </Layout>
    </HashRouter>
  )
}
