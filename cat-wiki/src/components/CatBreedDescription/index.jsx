import { CatBreedContainer } from './styles'
import { CatCompartment } from '../CatCompartment'

export const CatBreedDescription = ({
  name,
  description,
  temperament,
  origin,
  life_span: lifeSpan,
  adaptability,
  affection_level: affectionLevel,
  child_friendly: childFriendly,
  grooming,
  intelligence,
  health_issues: healthIssues,
  social_needs: socialNeeds,
  stranger_friendly: strangerFriendly
}) => {
  return (
    <CatBreedContainer>
      <h1 className='font-semibold' >{name}</h1>
      <p className='description'>{description}</p>

      <p>
        <span>Temperament:</span> {temperament}
      </p>

      <p>
        <span>Origin:</span> {origin}
      </p>

      <p>
        <span>Life Span:</span> {lifeSpan} years
      </p>

      <section>
        <div className='stuffed'>
          <span>Adaptability:</span>
          <div>
            <CatCompartment stuffed={adaptability} />
          </div>
        </div>

        <div className='stuffed'>
          <span>Affection level:</span>
          <div>
            <CatCompartment stuffed={affectionLevel} />
          </div>
        </div>

        <div className='stuffed'>
          <span>Child Friendly:</span>
          <div>
            <CatCompartment stuffed={childFriendly} />
          </div>
        </div>

        <div className='stuffed'>
          <span>Grooming:</span>
          <div>
            <CatCompartment stuffed={grooming} />
          </div>
        </div>

        <div className='stuffed'>
          <span>Intelligence:</span>
          <div>
            <CatCompartment stuffed={intelligence} />
          </div>
        </div>

        <div className='stuffed'>
          <span>Health issues:</span>
          <div>
            <CatCompartment stuffed={healthIssues} />
          </div>
        </div>

        <div className='stuffed'>
          <span>Social needs:</span>
          <div>
            <CatCompartment stuffed={socialNeeds} />
          </div>
        </div>

        <div className='stuffed'>
          <span>Stranger friendly:</span>
          <div>
            <CatCompartment stuffed={strangerFriendly} />
          </div>
        </div>
      </section>
      <section>
        
      </section>
    </CatBreedContainer>
  )
}
