import React from 'react';
import Slider from '@farbenmeer/react-spring-slider';
import ContentBlock from './ContentBlock';
import Box from '@material-ui/core/Box';
import Container from '@material-ui/core/Container';
import { makeStyles } from '@material-ui/core/styles';
// import Container from '@material-ui/core/Container';

const useStyles = makeStyles((theme) => ({
  contentBox: {
    height: "100%",
  },
}));

export default function Carousel(props) {
  const classes = useStyles();

  const contentBlocks = props.slides.map((slide, index) =>
  <ContentBlock key={index} block_data={props.slides[index]} />)

  return (
    <Container className={classes.contentBox}>
      <Slider
        hasBullets>
        {contentBlocks}
      </Slider>
    </Container>
  )
}
