
import { getPopular } from "../utils/getCatsInfo"
import { useNavigate } from 'react-router-dom'
import Skeleton, { SkeletonTheme } from 'react-loading-skeleton'
import { useEffect, useState } from "react"

export const TopBreeds = () => {
    const [topBreeds, setTopBreeds] = useState(null);
    const [isLoading, setIsLoading] = useState(true);
    const array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    const navigate = useNavigate();

    useEffect(() => {
        getPopular().then((data) => {
            setTopBreeds(data)
            setIsLoading(false)
            console.log(data)
        })
    }, [])

    // Delay rendering if data is still loading
    if (isLoading || !topBreeds) {
        return (
            <SkeletonTheme
                baseColor='#ccc7c7'
                highlightColor='#7a7a7a'
                borderRadius={24}
            >
                {array.map((value) => (
                    <div key={value}>
                        <Skeleton width={220} height={220} />
                        <p><Skeleton /></p>
                    </div>
                ))}
            </SkeletonTheme>
        );
    }

    return (
        <div>
            <div>
                <h2 style={{ fontWeight: 'bold', fontSize: '1.5rem', marginBottom: '3rem', marginTop: '1rem', color: '#291507' }}>Top 10 most searched breeds</h2>
            </div>
            <div className="mb-14">
                {topBreeds.map((catBreed, index) => {
                    const { name, id, imageUrl, description } = catBreed;
                    const uniqueKey = `${id}-${imageUrl}`;

                    return (
                        <div key={uniqueKey} onClick={() => navigate(`/cats/breed/${name}`, { state: { catBreed } })} style={{ width: '100%', display: 'flex', marginBottom: '2rem' }}>
                            <div style={{ flexShrink: 0, width: '180px', height: '180px', borderRadius: '12px', overflow: 'hidden', marginRight: '4rem' }}>
                                <img
                                    src={imageUrl}
                                    style={{ width: '100%', height: '100%', objectFit: 'cover', borderRadius: '12px' }}
                                    alt="breed photo"
                                    data-testid="breed-image"
                                />
                            </div>
                            <div style={{ display: 'flex', flexDirection: 'column', flexGrow: 1 }}>
                                <div style={{ textDecoration: 'none' }}>
                                    <h3
                                        data-testid="breed-name"
                                        style={{ fontWeight: 'bold', fontSize: '1.5rem', textDecoration: 'none', marginBottom: '0.5rem', cursor: 'pointer', color: '#291507' }}
                                    >{`${index + 1}. ${name}`}</h3>
                                </div>
                                <p
                                    data-testid="breed-description"
                                    style={{ fontSize: '0.875rem', fontWeight: 'normal', marginTop: '1rem', color: '#291507' }}
                                >
                                    {description}
                                </p>
                            </div>
                        </div>
                    );
                })}
            </div>
        </div>
    );
};