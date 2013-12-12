<?php
namespace Serfhos\MyUserManagement\ViewHelpers\Widget;

/***************************************************************
 * Copyright notice
 *
 * (c) 2013 Sebastiaan de Jonge <office@sebastiaandejonge.com>, SebastiaanDeJonge.com
 *  
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * Groups for file mount view helper
 *
 * @package my_user_management
 * @author Sebastiaan de Jonge <office@sebastiaandejonge.com>, SebastiaanDeJonge.com
 */
class GroupsForFileMountWidgetViewHelper extends \TYPO3\CMS\Fluid\Core\Widget\AbstractWidgetViewHelper {

	/**
	 * @var \Serfhos\MyUserManagement\ViewHelpers\Widget\Controller\GroupsForFileMountController
	 * @inject
	 */
	protected $controller;

	/**
	 * Render
	 *
	 * @param \Serfhos\MyUserManagement\Domain\Model\FileMount $fileMount
	 * @return string
	 */
	public function render(\Serfhos\MyUserManagement\Domain\Model\FileMount $fileMount) {
		return $this->initiateSubRequest();
	}

}
