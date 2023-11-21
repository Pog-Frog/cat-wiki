import { Footer } from '../components/Footer'
import { Header } from '../components/Header'

export const Layout = ({ children }) => {
  return (
    <main style={{ position: 'relative' }}>
      <Header />
      {children}
      <Footer />
    </main>
  )
}
