import useSWR from 'swr';
import axios from 'axios';

export const getPopular = () => {
    const fetcher = async (url) => await axios.get(url).then((res) => res.data.data);
    const { data, error , isLoading, mutate} = useSWR('http://127.0.0.1:8000/api/cats/top', fetcher);

    return {
        data: data,
        isLoading: isLoading,
        isError: error,
        mutate: mutate
    }
}



// export const getPopular = async () => {
//     const response = await fetch('http://127.0.0.1:8000/api/cats/top')
//     const data = await response.json()
//     return data
// }