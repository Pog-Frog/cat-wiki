import { CatWikiWelcome } from '../../components/CatWikiWelcome/CatWikiWelcome';
import { MostSearchedBreeds } from '../../components/MostSearchedBreeds/MostSearchedBreeds';
import { getAllCats, getPopular } from '../../utils/getCatsInfo';
import { useQuery } from 'react-query';
import { HaveACat } from '../../components/HaveACat';

export const CatBreedStartView = () => {
  const { data } = useQuery('allCats', getAllCats);  // Change the key to 'allCats' for the first query
  const { data: popularCats, isLoading: isLoadingPopular } = useQuery('popularCats', getPopular);  // Change the key to 'popularCats' for the second query

  return (
    <>
      <CatWikiWelcome cats={data} />
      <MostSearchedBreeds cats={popularCats?.slice(0, 4)} isLoading={isLoadingPopular} />
      <HaveACat />
    </>
  );
};