/*

	title: transaction.js
	desc: Database model for a transaction
	author: David Whynot
	email: davidmwhynot@gmail.com
	Project: stripe_sandbox
	Created: 10/19/18
	Updated: 10/19/18

*/


/* XXX IMPORTS XXX */
const mysql = require('mysql');




/* XXX CONFIG XXX */
require('dotenv').config();
const OPTS = {
	host: process.env.STRIPESANDBOX_HOST,
	user: process.env.STRIPESANDBOX_DB_USER,
	password: process.env.STRIPESANDBOX_DB_PASSWORD,
	database: process.env.STRIPESANDBOX_DB_DATABASE
};




/* XXX EXPORTS XXX */
module.exports = {
	/* XXX FUNCTIONS XXX */
	create: () => {

	}
}
