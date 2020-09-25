import React from 'react';

import Nav from './components/Nav';
import Hero from './components/Hero';
import Carousel from './components/Carousel';
import ContentBlock from './components/ContentBlock';
import Contact from './components/Contact';

import { makeStyles } from '@material-ui/core/styles';
import Grid from '@material-ui/core/Grid';


const useStyles = makeStyles((theme) => ({
  gridContainer: {
  }
}));

export default function App(props) {
  const classes = useStyles();

  return (
    <Grid container>
      <Grid item xs={12}>
        <Nav logo={props.data.logo} title={props.data.title} />
      </Grid>
      <Grid item xs={12}>
        <Carousel slides={props.data.content_blocks} />
      </Grid>
      <Grid item xs={12}>
        <Contact />
      </Grid>
    </Grid>
  )
};
