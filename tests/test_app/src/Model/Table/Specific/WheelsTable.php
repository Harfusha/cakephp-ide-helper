<?php
namespace TestApp\Model\Table;

use Cake\ORM\Table;

/**
 * @method \TestApp\Model\Entity\Wheeeeeeeel newEntity($data = null, array $options = [])
 */
class WheelsTable extends Table {

	/**
	 * @param array $config
	 * @return void
	 */
	public function initialize(array $config): void {
		parent::initialize($config);

		$this->belongsTo('Cars');

		$this->addBehavior('Tree');
	}

}
