<?php
class ViewCheckboxField extends ViewControl
{

	public function getTrueCondition($data)
	{
		if( $this->getHostPageDbType() == nDATABASE_PostgreSQL )
			return $data[$this->field] === "t" || $data[$this->field] !== "f" && $data[$this->field] != 0 && $data[$this->field] != "";
		else
			return $data[$this->field] != 0 && $data[$this->field] != "";
	}

	public function getPdfValue(&$data, $keylink = "")
	{
		$boolVal = $this->getTrueCondition($data) ? "true" : "false";
		return "{text: '', checkbox: " . $boolVal . "}";
	}

	public function showDBValue(&$data, $keylink, $html = true )
	{		
		$result = "<img src=\"";
		$imgSrc = "images/check_";
			
		$imgSrc.= $this->getTrueCondition($data) ? "yes" : "no";

		$result.= GetRootPathForResources($imgSrc.".gif")."\" border=0";
		if(isEnableSection508())
			$result .= " alt=\" \"";
		$result .=  ">";
		
		return $result;
	}
	
	/**
	 * Get the host page's db connection's type
	 * @return Number
	 */
	protected function getHostPageDbType()
	{
		global $cman;
		return $cman->byTable( $this->container->tName )->dbType;
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "", $html = false )
	{
		return nl2br( $data[ $this->field ] );
	}
}
?>