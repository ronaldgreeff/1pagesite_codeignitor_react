import React from 'react';
import LogoName from './LogoName';
import { makeStyles } from '@material-ui/core/styles';
import "fontsource-nova-round"
import AppBar from '@material-ui/core/AppBar';
import Toolbar from '@material-ui/core/Toolbar';
import Grid from '@material-ui/core/Grid';
import IconButton from '@material-ui/core/IconButton';
import CallIcon from '@material-ui/icons/Call';
import EmailIcon from '@material-ui/icons/Email';

const useStyles = makeStyles((theme) => ({
  root: {
    flexGrow: 1,
  },
  appBar: {
    // margin: 0,
    // padding: 0,
    // position: "relative"
  },
  gridContainer: {
    alignItems: "center",
    justifyContent: "space-between",
  },
  navActions: {
    float: "right",
  }
}));

export default function Nav(props) {
  const classes = useStyles();

  return (
    <div className={classes.root}>
      <AppBar className={classes.appBar}>
        <Toolbar>
          <Grid container className={classes.gridContainer}>
            <Grid item>
              <LogoName logo={props.logo} title={props.title} />
            </Grid>
            <Grid item>
              <div className={classes.navActions}>
                <IconButton>
                  <CallIcon />
                </IconButton>
                <IconButton>
                  <EmailIcon />
                </IconButton>
              </div>
            </Grid>
          </Grid>
        </Toolbar>
      </AppBar>
    </div>
  )
};
