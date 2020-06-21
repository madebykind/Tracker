<?php
namespace topshelfcraft\tracker\config;

use craft\base\Model;

/**
 * @author Michael Rog <michael@michaelrog.com>
 * @package Tracker
 * @since 3.0.0
 */
class Settings extends Model
{

	/**
	 * @var string
	 */
	public $trackingId;

	/**
	 * @var array
	 */
	public $defaultParams = [];

	/**
	 * @var array A map of Google Analytics parameter names to more friendly handles for our template developers.
	 */
	const GoogleParamNames = [

		/*
		 * Main Parameters
		 */

		'adSenseNumber' => 'a', // Random number used to link Google Analytics to Adsense (currently not working)
		'clientId' => 'cid', // Client ID number
		'encodingType' => 'de', // Document Encoding type
		'location'  => 'dl', // URL of the page being viewed.
		'title' => 'dt', // Page title of the page being viewed.
		'flashVersion' => 'fl', // Flash version on the site.
		'nonInteraction' => 'ni', // Non-interaction hit type (1 = yes, 0 = no)
		'javaEnabled' => 'je' , // Whether Java is enabled on the site, (1 = yes, 2 = no)
		'screenDepth' => 'sd', // The view screen's depth.
		'screenResolution' => 'sr', // The view screen's resolution.
		'type' => 't', // The Type of tracking call that triggers the analytics request (e.g. pageview, event).
		'trackingId' => 'tid', // Google Analytics user account number (UA-XXXXXX-X)
		'userLanguage' => 'ul', // Language displayed on the site.
		'version' => 'v', // Protocol version
		'sdkVersion' => '_v', // SDK version number.
		'hitIncrement' => '_s', // Hit Sequence, increments each time an event happens.
		'verificationCode' => '_u', // Verification code generated by GA analytics.js
		'cacheBuster' => 'z', // Functions as a cachebuster.

		/*
		 * Override Parameter
		 */

		'documentHostNameOverride' => 'dh', // Document host name override
		'documentPathOverride' => 'dp', // Document Path override, used when overriding the standard page name.
		'userAgentOverride' => 'ua', // User agent override.
		'userIpOverride' => 'uip', // User Ip override.
		'screenName' => 'cd', // Screen name, mainly used in app tracking.
		'linkId' => 'linkid', // Link ID of a clicked DOM element.

		/*
		 * Events Parameters
		 *
		 * You will only see any of these when t (type) = event
		 */

		'eventAction' => 'ea', // Event Action.
		'eventCategory' => 'ec', // Event Category.
		'eventLabel' => 'el', // Event Label.
		'eventValue' => 'ev', // Event value.

		/*
		 * Timing Parameters
		 */

		'userTimingCategory' => 'utc', // User timing category, not universal coordinated time.
		'userTimingVarName' => 'utv', // User timing variable name.
		'userTimingTime' => 'utt', // User timing time.
		'userTimingLabel'=> 'utl', // User timing label.
		'pageLoadTime' => 'plt', // Page load time.
		'dnsTime' => 'dns', // DNS time.
		'pageDownloadTime' => 'pdt', // Page download time.
		'redirectResponseTime' => 'rrt', // Redirect response time.
		'tcpConnectTime' => 'tcp', // TCP connect time.
		'serverResponseTime' => 'srt', // Server response time.
		'exceptionDescription' => 'exd', // Exception Description.
		'isExceptionFatal' => 'exf', // Whether exception fatal or not.

		/*
		 * Campaign Variable Parameters
		 *
		 * To register any campaign variables (c*) you MUST populate Campaign Source AND Campaign Medium as a minimum.
		 */

		'campaignName' => 'cn', // Campaign name.
		'campaignSource' => 'cs', // Campaign source.
		'campaignMedium' => 'cm', // Campaign medium.
		'campaignKeyword' => 'ck', // Campaign keyword.
		'campaignContent' => 'cc', // Campaign content.
		'campaignId' => 'ci', // Campaign Id.
		'adwordsId' => 'glcid', // Google adwords id.
		'displayAdsId' => 'dclid', // Google display ads id.

		/*
		 * eCommerce Parameters
		 *
		 * You will only see these when t (Type) = transaction or item.
		 */

		'currency' => 'cu', // Currency the transaction takes place in.
		'itemName' => 'in', // The item name.
		'itemCode' => 'ic', // The item's sku.
		'itemPrice' => 'ip', // The item's price (per unit).
		'itemQuantity' => 'iq', // Item quantity.
		'itemVariation' => 'iv', // The item's category or variety.
		'transactionAffiliation' => 'ta', // The transaction affiliation.
		'transactionIdentification' => 'ti', // Transaction identification number.
		'transactionRevenueValue' => 'tr', // Transactions' revenue value.
		'transactionShippingValue' => 'ts', // Transactions' shipping value.
		'transactionTaxValue' => 'tv', // Transaction tax value.

		/*
		 * App Tracking Parameters
		 */

		'applicationId' => 'aid', // Application Id.
		'applicationInstallerId' => 'aiid', // Application installer Id.
		'applicationName' => 'an', // Application Name.
		'applicationVersion' => 'av', // Application version.
		'hitSequence' => 'ht', // Hit sequence.

		/*
		 * Other Parameters
		 *
		 * When using 'anonymizeIp' the key just needs to be there, you can pass it any value, or pass it no value and
		 * and it will anonymize the IP.
		 */

		'anonymizeIp' => 'aip', // Anonymize IP address.
		'queueTime' => 'qt', // Queue time ( for collecting offline data).
		'sessionControl' => 'sc', // Session Control.
		'userId' => 'uid', // User ID (known uid as opposed to cid).

		/*
		 * Google Experiments Parameters
		 */

		'experimentId' => 'xid', // The experiment id.
		'experimentVariant' => 'xvar', // The experiment variant.

		/*
		 * Social Tracking Parameters
		 */

		'socialNetwork' => 'sn', // The social network.
		'socialAction' => 'sa', // Social action.
		'socialActionTarget' => 'st', // The social action target, typically a URL.

	];

}
