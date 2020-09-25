import React from 'react';
import Typography from '@material-ui/core/Typography';

import { makeStyles } from '@material-ui/core/styles';
import "fontsource-nova-round"

const useStyles = makeStyles((theme) => ({
  iconContainer: {
    display: "inline-flex",
    alignSelf: "center",
    alignItems: "center"
  },
  svgIconSvg: {
    height:"3em",
    width:"3em",
    marginTop: "5px",
  },
  title: {
    fontFamily: "Nova Round",
    fontSize: "2rem",
    marginLeft: "5px",
  }
}));

export default function LogoName(props) {
  const classes = useStyles();

  return (
    <>
    <div className={classes.iconContainer}>
      <img className={classes.svgIconSvg} src={props.logo} />
      <Typography className={classes.title}>
        {props.title}
      </Typography>
    </div>
    </>
  )
};
