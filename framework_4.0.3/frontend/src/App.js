import React from 'react';

import Nav from './components/Nav';
import Hero from './components/Hero';
import Carousel from './components/Carousel';
// import Contact from './components/Contact';

import { makeStyles } from '@material-ui/core/styles';
// import Grid from '@material-ui/core/Grid';

const useStyles = makeStyles((theme) => ({
  mainGrid: {
    height: "100vh",
    backgroundColor: "red",
  }
}));

export default function App(props) {
  const classes = useStyles();

  return (
    <div className={classes.mainGrid}>
      <Hero logo={props.data.logo} title={props.data.title} />
      <Nav logo={props.data.logo} title={props.data.title} />
      <Carousel slides={props.data.content_blocks} />
      <Hero logo={props.data.logo} title={props.data.title} />
    </div>
  )
};
