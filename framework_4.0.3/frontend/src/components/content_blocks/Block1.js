import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Container from '@material-ui/core/Container';


const useStyles = makeStyles((theme) => ({
  imgContainer: {
    position: "relative"
  },
  blob: {
    width: "100%",
  },
  main: {
    position: "absolute",
    top: "50%",
    left: "50%",
    // transform: t
  },
}));

export default function Block1(props) {
  const classes = useStyles();

  const blob = props.block_data.img["1blob.svg"];
  const main = props.block_data.img["1computer.svg"];

  return (
    <Container>
      <img className={classes.blob} src={blob} />
      <img className={classes.main} src={main} />
    </Container>
  )
}
