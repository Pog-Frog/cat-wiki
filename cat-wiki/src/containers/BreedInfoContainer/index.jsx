import { ImgContainer, StyledBreedInfoContainer } from './styles';
import { CatBreedDescription } from '../../components/CatBreedDescription';
import { useEffect, useState } from 'react';
import axios from 'axios';

export const BreedInfoContainer = (props) => {

  const { imageUrl, name, id } = props;
  console.log(id);

  const [imagees, setImagees] = useState([]);

  useEffect(() => {
    window.scrollTo(0, 0);
    axios
      .get(`https://api.thecatapi.com/v1/images/search?limit=6&breed_ids=${id}`)
      .then((res) => {
        setImagees(res.data);
      })
      .catch((err) => {
        console.log(err);
      });
  }, [id]);

  return (
    <>
      <StyledBreedInfoContainer>
        <ImgContainer>
          <img src={imageUrl} alt={name} />
          <div />
        </ImgContainer>

        <CatBreedDescription {...props} />


      </StyledBreedInfoContainer>
      <h1 className='font-semibold' style={{margin:"1rem"}}>Other images</h1>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(3, 400px)', gap: '16px' ,marginBottom:"1rem"}}>
        {imagees.map((image, index) => (
          <img key={index} src={image.url} alt={`Breed ${name} Image ${index + 1}`} style={{ width: '100%', height: '100%', objectFit: 'cover', borderRadius: '8px' }} />
        ))}
      </div>

    </>
  );
};