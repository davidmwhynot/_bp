/* XXX imports XXX */
/* core */
const http = require('http');

/* vendor */
const debug = require('debug');

/* local */
const app = require('./dist/server').default;

/* XXX config XXX */
const log = debug(`${app.get('appName')}:server.js`);

/* XXX main XXX */
// create HTTP server
const server = http.createServer(app);

server.listen(normalizePort(app.get('PORT') || '3000')); // Listen on provided port, on all network interfaces.
server.on('error', onError); // register error handler
server.on('listening', onListening); // register event handler

/* XXX functions XXX */
// Normalize a port into a number, string, or false.
function normalizePort(val) {
	const port = parseInt(val, 10);

	if (isNaN(port)) {
		// named pipe
		return val;
	}

	if (port >= 0) {
		// port number
		return port;
	}

	return false;
}

// Event listener for HTTP server 'error' event.
function onError(error) {
	if (error.syscall !== 'listen') {
		throw error;
	}

	const bind = typeof PORT === 'string' ? 'Pipe ' + PORT : 'Port ' + PORT;

	// handle specific listen errors with friendly messages
	switch (error.code) {
		case 'EACCES':
			console.error(bind + ' requires elevated privileges');
			process.exit(1);
			break;
		case 'EADDRINUSE':
			console.error(bind + ' is already in use');
			process.exit(1);
			break;
		default:
			throw error;
	}
}

// Event listener for HTTP server 'listening' event.
function onListening() {
	const addr = server.address();
	const bind = typeof addr === 'string' ? 'pipe ' + addr : 'port ' + addr.port;
	log('Listening on ' + bind);
	if (process.send) {
		log('sending listening');
		process.send({ event: 'listening' });
	}
}
