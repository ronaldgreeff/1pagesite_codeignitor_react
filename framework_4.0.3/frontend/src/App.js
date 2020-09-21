import React from 'react';
import { useQuery, QueryCache, ReactQueryCacheProvider } from 'react-query';
import { ReactQueryDevtools } from 'react-query-devtools';

import Button from '@material-ui/core/Button';

function Example() {
  const { isLoading, error, data } = useQuery('initialData', () =>
    fetch('http://localhost:8080/data').then(res =>
      res.json()
    )
  )
  console.log('data', data)

  if (isLoading) return 'Loading...'

  if (error) return 'An error occurred: ' + error.message

  return (
    <div>
      <h1>{data.title}</h1>
    </div>
  )
}

function App() {
  return (
    <>
      <div className="App">
        <Example />
      </div>
      <ReactQueryDevtools />
    </>
  );
}

export default App;
