/* XXX imports XXX */
/* vendor */
import { Router } from 'express';

/* XXX main XXX */
/* init */
const router = Router();

/* routes */
// GET /
router.get('/', (req, res) => {
	const data = {
		title: 'api'
	};
	res.json(data);
});

/* XXX exports XXX */
export default router;
