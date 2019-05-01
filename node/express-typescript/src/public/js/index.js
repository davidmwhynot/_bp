import { h, render, Component } from 'preact';
import Clock from './components/Clock';
import Timezone from './components/Timezone';
import GetData from './components/GetData';

class App extends Component {
	constructor() {
		super();
	}

	render(props, state) {
		console.log('rendering');
		return (
			<div>
				<Clock />
				<h3>
					Timezone: <Timezone />
				</h3>
				<br />
				<GetData />
			</div>
		);
	}
}

// render App into #app:
render(<App />, document.getElementById('app'));
