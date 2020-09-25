import React from 'react';
import { makeStyles } from '@material-ui/core/styles';


const useStyles = makeStyles((theme) => ({
  slider: {
    height: "80vh",
  },
  currentSlide: {
    height: "80%",
  }
}));

export default function Block1(props) {
  const classes = useStyles();

  console.log(props.block_data)

  const blob = props.block_data.img["1blob.svg"];
  const main = props.block_data.img["1computer.svg"];

  return (
    <div>
    d
    </div>
  )
}
