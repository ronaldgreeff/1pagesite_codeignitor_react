import React from 'react';
import Typography from '@material-ui/core/Typography';
import Container from '@material-ui/core/Container';
import Box from '@material-ui/core/Box';

import { makeStyles, useTheme } from '@material-ui/core/styles';
import useMediaQuery from '@material-ui/core/useMediaQuery';

// import Container from '@material-ui/core/Container';

const useStyles = makeStyles((theme) => ({
  contentContainer: {
    height: "100%",
    display: "flex",
    flexDirection: "column",
    flexWrap: "no-wrap",
    justifyContent: "space-evenly",
    textAlign: "center",
  },
  // svgImage: {
  //   width: "100%",
  // }
}));

export default function Block1(props) {
  console.log(props.block_data);
  const classes = useStyles();
  const theme = useTheme();
  const matches = useMediaQuery(theme.breakpoints.up('md'));
  const src = matches ? props.block_data.img['fullscreen.svg'] : props.block_data.img['phone.svg']

  return (
    <>
      <Container className={classes.contentContainer}>
        <Typography variant="h5">
          {props.block_data.title}
        </Typography>
          <img className={classes.svgImage} src={src} />
        <Typography variant="body1">
          {props.block_data.desc}
        </Typography>
      </Container>
    </>
  )
}
