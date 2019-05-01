import { h, Component } from 'preact';
import axios from 'axios';

export default class GetData extends Component {
	constructor() {
		super();
		this.state.data = 'hello';
	}

	getData = async () => {
		const res = await axios.get('/api');
		console.log(res);
		this.setState({ data: res.data.title });
	};

	render(props, state) {
		return (
			<div>
				<button onClick={this.getData}>Get Data</button>
				<h1>Data: {state.data}</h1>
			</div>
		);
	}
}
