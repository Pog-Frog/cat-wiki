import { FilledCircle, UnfilledCircle, StuffedContainer } from './styles'

export const CatCompartment = ({ stuffed = 0 }) => {
  return (
    <StuffedContainer>
      {Array(stuffed)
        .fill(0)
        .map((_, i) => (
          <FilledCircle key={i} />
        ))}

      {Array(5 - stuffed)
        .fill(0)
        .map((_, i) => (
          <UnfilledCircle key={i} />
        ))}
    </StuffedContainer>
  )
}
