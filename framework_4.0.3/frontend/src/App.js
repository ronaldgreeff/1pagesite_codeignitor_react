import React, { useState} from 'react';
import { useQuery } from 'react-query';
import { ReactQueryDevtools } from 'react-query-devtools';

import Button from '@material-ui/core/Button';

// function GetData(props) {
//   const { isLoading, error, data } = useQuery('initialData', () =>
//     fetch('http://localhost:8080/data').then(res =>
//       res.json()
//     )
//   )
//   if (isLoading) return 'Loading...'
//   if (error) return 'An error occurred: ' + error.message
//   return data
// }

// https://react-query.tanstack.com/docs/guides/initial-query-data

function App() {

  return (
    <div>
    p
    </div>
  )
}


export default App;

// function App() {
//   return (
//     <>
//       <div className="App">
//       </div>
//       <ReactQueryDevtools />
//     </>
//   );
// }
//
// export default App;
