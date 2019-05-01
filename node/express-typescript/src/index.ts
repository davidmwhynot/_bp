/* XXX imports XXX */
/* core */
import path from 'path';

/* vendor */
import express from 'express';
import createError from 'http-errors';
import debug from 'debug';
import morgan from 'morgan-debug';
import bodyParser from 'body-parser';
import exphbs from 'express-handlebars';
import hbs from 'handlebars';
import helpers from 'handlebars-helpers';

/* local */
// config
import { PORT, appName, env } from './config';

// router
import { api } from './router';

/* XXX main XXX */
/* init */
const app = express();

/* config */
const log = debug(`${app.get('appName')}:app`);
app.set('PORT', PORT);
app.set('appName', appName);
app.set('env', env);
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'hbs');

// handlebars views config
helpers(['comparison'], { handlebars: hbs });

/* middleware */
// morgan
log(app.get('env'));
app.use(morgan('TODO:morgan', app.get('env')));

// bodyparser
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));

// handlebars view engine
app.engine(
	'hbs',
	exphbs({
		defaultLayout: 'default',
		layoutsDir: path.join(__dirname, 'views', 'layouts'),
		partialsDir: path.join(__dirname, 'views', 'partials'),
		extname: '.hbs',
		compilerOptions: {
			noEscape: true
		}
	})
);

// set static folder
app.use(express.static(path.join(__dirname, '..', 'public')));

/* routes */
app.get('/', (req, res) => {
	res.render('index');
});
app.use('/api', api);

/* errors */
// catch 404 and forward to error handler
app.use((req, res, next) => {
	next(createError(404));
});

// error handler
app.use((err, req, res, next) => {
	// set locals, only providing error in development
	res.locals.message = err.message;
	res.locals.error = req.app.get('env') === 'dev' ? err : {};

	// render the error page
	res.status(err.status || 500);
	res.render('error');
});

/* XXX exports XXX */
export default app;
