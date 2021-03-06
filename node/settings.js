var settings = {}

/**
 * Main address of LHC installation
 * */
settings.http_address_lhc = 'livehelperchat.com';

/**
 * To what address listen
 * */
settings.listen_address = 'localhost';

/**
 * To what port to listen
 * */
settings.listen_port = 4567;

/**
 * Path to ejabberdctl
 * */
settings.ejabberdctl = '/opt/ejabberd-15.04/bin/ejabberdctl'

//************************** CHAT SETTINGS

/**
 * How long online visitor should be considered as online. Miliseconds
 * */
settings.online_timeout = 50000;

/**
 * After how many seconds after disconnect we should inform LHC that visitor is offline
 * */
settings.online_timeout_destroy = 50000;

settings.debug = {};

/**
 * Enable debug output
 * */
settings.debug.output = true;

module.exports = settings;