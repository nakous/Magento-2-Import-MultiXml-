<?php
namespace Webmobi\Import\Controller\Adminhtml\Price;

/**
 * Blog post save controller
 */
class Save extends \Webmobi\Import\Controller\Adminhtml\Price
{
	/**
	 * Before model save
	 * @param  \Magesales\Blog\Model\Price $model
	 * @param  \Magento\Framework\App\Request\Http $request
	 * @return void
	 */
	/*protected function _beforeSave($model, $request)
	{
		if ($links = $request->getParam('links')) {

			foreach (array('post', 'product') as $key) {
				$param = 'related'.$key.'s';
				if (!empty($links[$param])) {
					$ids = array_unique(
						array_map('intval',
							explode('&', $links[$param])
						)
					);
					if (count($ids)) {
						$model->setData('related_'.$key.'_ids', $ids);
					}
				}
			}
		}
	}*/
	
}
