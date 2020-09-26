import React from 'react';
import Typography from '@material-ui/core/Typography';
import Container from '@material-ui/core/Container';
import Box from '@material-ui/core/Box';

import { makeStyles, useTheme } from '@material-ui/core/styles';
import useMediaQuery from '@material-ui/core/useMediaQuery';

import "fontsource-nova-round"
// import Container from '@material-ui/core/Container';

const useStyles = makeStyles((theme) => ({
  contentContainer: {
    height: "100%",
    display: "flex",
    flexDirection: "column",
    flexWrap: "no-wrap",
    justifyContent: "center",
    textAlign: "center",
  },
  title: {
    marginTop: "2rem",
    fontFamily: "Nova Round",
    fontSize: "5rem",
    marginLeft: "5px",
  },
  logo: {
    alignSelf: "center",
    width: "343px",
  }
}));

export default function Hero(props) {
  const classes = useStyles();

  return (
    <>
      <Container className={classes.contentContainer}>
        <img className={classes.logo} src={props.logo} />
        <Typography className={classes.title}>
          {props.title}
        </Typography>
      </Container>
    </>
  )
}
