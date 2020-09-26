import React from 'react';
import Block1 from './content_blocks/Block1';
import Slider from 'react-animated-slider';
import 'react-animated-slider/build/horizontal.css';
import { makeStyles } from '@material-ui/core/styles';
import Container from '@material-ui/core/Container';


const useStyles = makeStyles((theme) => ({
  slider: {
    // height: "80vh",
  },
  currentSlide: {
    // height: "80%",
  }
}));

export default function Carousel(props) {
  const classes = useStyles();

  return (
    <Container>
      <Slider>
        <Block1 block_data={props.slides[0]} />
        </Slider>
    </Container>
  )
}
