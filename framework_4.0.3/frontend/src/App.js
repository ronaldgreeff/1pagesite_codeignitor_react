import React from 'react';

import Nav from './components/Nav';
import Hero from './components/Hero';
import ContentBlock from './components/ContentBlock';
import Contact from './components/Contact';


export default function App(props) {

  console.log(props.data);

  const content = props.data.content_blocks.map((cb, i) =>
    <div key={i}>
      {cb.title}
    </div>
  )

  return (
    <>
      <Nav />
      <Hero />
      { content }
      <Contact />
    </>
  )
};
