<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src= "https://unpkg.com/react@16/umd/react.production.min.js"></script>
    <script src= "https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
    <!-- Load Babel Compiler -->
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/@material-ui/core@4.11.0/umd/material-ui.development.js"></script>
  </head>
  <body>
    <div id="root"></div>

    <script  type="text/babel">

      class App extends React.Component {
        state = {
          contacts: []
        }
        render() {
          return (
              <React.Fragment>

              </React.Fragment>
          );
        }
      }

      ReactDOM.render(<App />, document.getElementById('root'));
      </script>
  </body>
</html>
