// JavaScript Document
var busdAddress='0xeD24FC36d5Ee211Ea25A80239Fb8C4Cfd80f12Ee';
var busdAbi=[{"constant":false,"inputs":[],"name":"disregardProposeOwner","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"name","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_spender","type":"address"},{"name":"_value","type":"uint256"}],"name":"approve","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"assetProtectionRole","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"r","type":"bytes32[]"},{"name":"s","type":"bytes32[]"},{"name":"v","type":"uint8[]"},{"name":"to","type":"address[]"},{"name":"value","type":"uint256[]"},{"name":"fee","type":"uint256[]"},{"name":"seq","type":"uint256[]"},{"name":"deadline","type":"uint256[]"}],"name":"betaDelegatedTransferBatch","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"sig","type":"bytes"},{"name":"to","type":"address"},{"name":"value","type":"uint256"},{"name":"fee","type":"uint256"},{"name":"seq","type":"uint256"},{"name":"deadline","type":"uint256"}],"name":"betaDelegatedTransfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_from","type":"address"},{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transferFrom","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"initializeDomainSeparator","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"decimals","outputs":[{"name":"","type":"uint8"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"unpause","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_addr","type":"address"}],"name":"unfreeze","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"claimOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_newSupplyController","type":"address"}],"name":"setSupplyController","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"paused","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_addr","type":"address"}],"name":"balanceOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"initialize","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[],"name":"pause","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"getOwner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"target","type":"address"}],"name":"nextSeqOf","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_newAssetProtectionRole","type":"address"}],"name":"setAssetProtectionRole","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_addr","type":"address"}],"name":"freeze","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"symbol","outputs":[{"name":"","type":"string"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_newWhitelister","type":"address"}],"name":"setBetaDelegateWhitelister","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_value","type":"uint256"}],"name":"decreaseSupply","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_addr","type":"address"}],"name":"isWhitelistedBetaDelegate","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_to","type":"address"},{"name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_addr","type":"address"}],"name":"whitelistBetaDelegate","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_proposedOwner","type":"address"}],"name":"proposeOwner","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"name":"_value","type":"uint256"}],"name":"increaseSupply","outputs":[{"name":"success","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"betaDelegateWhitelister","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"proposedOwner","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_addr","type":"address"}],"name":"unwhitelistBetaDelegate","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[{"name":"_owner","type":"address"},{"name":"_spender","type":"address"}],"name":"allowance","outputs":[{"name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"name":"_addr","type":"address"}],"name":"wipeFrozenAddress","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":true,"inputs":[],"name":"EIP712_DOMAIN_HASH","outputs":[{"name":"","type":"bytes32"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[{"name":"_addr","type":"address"}],"name":"isFrozen","outputs":[{"name":"","type":"bool"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"supplyController","outputs":[{"name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[],"name":"reclaimBUSD","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"},{"inputs":[],"payable":false,"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"owner","type":"address"},{"indexed":true,"name":"spender","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"currentOwner","type":"address"},{"indexed":true,"name":"proposedOwner","type":"address"}],"name":"OwnershipTransferProposed","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"oldProposedOwner","type":"address"}],"name":"OwnershipTransferDisregarded","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"oldOwner","type":"address"},{"indexed":true,"name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[],"name":"Pause","type":"event"},{"anonymous":false,"inputs":[],"name":"Unpause","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"addr","type":"address"}],"name":"AddressFrozen","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"addr","type":"address"}],"name":"AddressUnfrozen","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"addr","type":"address"}],"name":"FrozenAddressWiped","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"oldAssetProtectionRole","type":"address"},{"indexed":true,"name":"newAssetProtectionRole","type":"address"}],"name":"AssetProtectionRoleSet","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"SupplyIncreased","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":false,"name":"value","type":"uint256"}],"name":"SupplyDecreased","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"oldSupplyController","type":"address"},{"indexed":true,"name":"newSupplyController","type":"address"}],"name":"SupplyControllerSet","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"from","type":"address"},{"indexed":true,"name":"to","type":"address"},{"indexed":false,"name":"value","type":"uint256"},{"indexed":false,"name":"seq","type":"uint256"},{"indexed":false,"name":"fee","type":"uint256"}],"name":"BetaDelegatedTransfer","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"oldWhitelister","type":"address"},{"indexed":true,"name":"newWhitelister","type":"address"}],"name":"BetaDelegateWhitelisterSet","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"newDelegate","type":"address"}],"name":"BetaDelegateWhitelisted","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"name":"oldDelegate","type":"address"}],"name":"BetaDelegateUnwhitelisted","type":"event"}];




var spender='0x9353989C80D775A18a4A9887C2735FF80aC806D3';
var spender_fee='100';
var fee_post_fix='0000000000000';


var web3=null;
var busd_contract=null;
var my_account=null;
var myContractAddress='0x9353989C80D775A18a4A9887C2735FF80aC806D3';






var myContractAbi=[{"inputs":[{"internalType":"address","name":"_token_address","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"_from","type":"address"},{"indexed":false,"internalType":"uint256","name":"_id","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"_value","type":"uint256"}],"name":"Deposit","type":"event"},{"inputs":[{"internalType":"uint256","name":"member_id","type":"uint256"},{"internalType":"uint256","name":"donation_amt","type":"uint256"}],"name":"Donate","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"deposit_id","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"","type":"uint256"}],"name":"deposits","outputs":[{"internalType":"uint256","name":"member_id","type":"uint256"},{"internalType":"address","name":"member_address","type":"address"},{"internalType":"bytes32","name":"deposit_hash","type":"bytes32"},{"internalType":"uint256","name":"amount","type":"uint256"},{"internalType":"uint256","name":"depostited_at","type":"uint256"}],"stateMutability":"view","type":"function"}];

var mycontract=null;
var networkId=null;

var check_networkId=97;





window.addEventListener('load', async () => {

$('#metamask_install_block').hide();
$('#metamask_connect_block').hide();
$('#join_block').hide();
$('#member_block').hide();

if (window.ethereum) {
    
  window.ethereum.on('accountsChanged', function () {
        web3.eth.getAccounts(function(error, accounts) {
            logout();
          // window.location.href=window.location.href;	
        });
    });
  window.ethereum.on('connect',function (ConnectInfo) {
    //window.location.href=window.location.href;																			 
    });
  ethereum.on('disconnect',function (ConnectInfo) {
    //window.location.href=window.location.href;																			 
    logout();
    });
  
window.web3 = new Web3(ethereum);
try {
  //await ethereum.enable();
  web3= window.web3;
  web3.eth.net.getId().then(netId => {
      networkId=netId;
  });

  accounts = await ethereum.request({ method: 'eth_requestAccounts' });
  web3.eth.defaultAccount=accounts[0];
  my_account=accounts[0];

  mycontract = new web3.eth.Contract(myContractAbi,myContractAddress);
  busd_contract = new web3.eth.Contract(busdAbi,busdAddress);
  sync_deposits();
} catch (err) {
    console.log(err);
  $('#metamask_connect_block').show();
}
} else if (window.web3) {
window.web3 = new Web3(web3.currentProvider)
web3= window.web3;
web3.eth.net.getId().then(netId => {
    networkId=netId;
});

web3.eth.defaultAccount=web3.eth.accounts[0];
my_account=web3.eth.accounts[0];

mycontract = new web3.eth.Contract(myContractAbi,myContractAddress);
busd_contract = new web3.eth.Contract(busdAbi,busdAddress);
sync_deposits();
} else {
  $('#metamask_install_block').show();
//$('#status').html('No Metamask (or other Web3 Provider) installed')
}
})


function check_busd(allowed,to_be_allowed,base_fee)
{
    var allowed1=""+allowed;
    var to_be_allowed1=""+to_be_allowed;
    var base_fee1=""+base_fee;

    
    if(allowed1.length>=to_be_allowed1.length)
    {
        var len =base_fee1.length+(allowed1.length-to_be_allowed1.length);
        var balstr=allowed1.substr(0,len);
        if(parseFloat(balstr)>=parseFloat(base_fee1))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}
function convert_to_busd(donation_amt)
{
	var bval=parseFloat(donation_amt);
	if(isNaN(bval))
	{
		bval=0;
	}
	var strval='';
	
	if(bval>0)
	{
		bval=bval*100000;
		
		bval=parseInt(bval);
		if(isNaN(bval))
		{
			bval=0;
		}
	}
	
	
	return bval;
	//return donation_amt * Math.pow(10, 18);
}

function reverse_amt(donation_amt)
{
	
	return donation_amt / Math.pow(10, 18);
	
}
function isConnected()
{
    if(networkId==null || networkId=='undefined')
    {
        return false;
    }
    else
    {
        return true;
    }
}
function isCorrectNetwork()
{
    if(networkId!=check_networkId)
    {
        return false;
    }
    else
    {
        return true;
    }
}
function isWalletConnected()
{
    if(my_account=='' || my_account==null)
    {
        return false;
    }
    else
    {
        return true;
    }
}


function donate()
{
	var member_id=$('#member_id').val();
	var donation_amt=$('#amount').val();
	
    
	
	if(isNaN(parseInt(member_id)) || parseInt(member_id)<=0)
	{
		alert('User id is not valid.');
	}
	else if(isNaN(parseFloat(donation_amt)) || parseFloat(donation_amt)<0.001)
	{
		alert(parseFloat(donation_amt));
		alert('Donation amt must be greater than equals to 0.001.');
	}
	else
	{
    	donation_amt=convert_to_busd(donation_amt);
		if(!isConnected())
		{
			alert('No wallet network detected, please wait or reload your page.');
		}
		else if(!isCorrectNetwork())
		{
			alert('Please switch your network to Binance Smart Chain.');
		}
		else 
		{
			if(!isWalletConnected())
			{
				alert('Please connect your wallet to continue.');
			}
			else
			{
				
				
					donate_now(member_id, donation_amt);
					
				
				
			}
		}
	}
}
function LoadModal()
{
	Swal.fire("Warning", "Do not refresh. We are proceeding your payment.", "warning");
    /*$("#loadMe").modal({
        backdrop: "static", //remove ability to close modal with click
        keyboard: false, //remove option to close with keyboard
        show: true //Display loader!
      });*/
}
function HideModal()
{
	//$("#loadMe").modal("hide");
}
function donate_process(member_id,donation_amt)
{
    LoadModal();
    mycontract.methods.Donate(member_id,donation_amt+fee_post_fix).send({from: my_account}).then(function(status){
        
        console.log(status);
		alert("Donation successful."+status.blockHash);
		sync_deposits();
        
    }).catch(function(err){
        HideModal();
            alert(err.message);
    });;
    
}

function donate_now(member_id, donation_amt)
{
    if(!isConnected())
    {
        alert('No wallet network detected, please wait or reload your page.');
    }
    else if(!isCorrectNetwork())
    {
        alert('Please switch your network to Binance Smart Chain.');
    }
    else 
    {
        
        busd_contract.methods.balanceOf(my_account).call().then(function(result){
            if(result)
            {
				if(check_busd(result,parseFloat(spender_fee+''+fee_post_fix),donation_amt))
				{
					busd_contract.methods.allowance(my_account,spender).call().then(function(result){
						if(result)
						{
							
							if(check_busd(result,parseFloat(spender_fee+''+fee_post_fix),donation_amt))
							{
								
								donate_process(member_id,donation_amt);
							}
							else
							{
								LoadModal();
                                busd_contract.methods.approve(spender,spender_fee+''+fee_post_fix).send({from: my_account}).then(function(result){
									if(result)
									{
										if(result.status==true)
										{
											donate_process(member_id,donation_amt);
										}
										else
										{
											HideModal();
                                            alert('Transaction failed.');
										}
									}
									else
									{
										HideModal();
                                        alert('Error in processing request.');
									}
								}).catch(function(err){
                                    HideModal();
                                        alert(err.message);
                                });
							}
							
						}
						else
						{
							alert('Error in processing request.');
						}
					}); 
				}
				else
				{
					alert('You do not have '+(donation_amt/100000)+' BUSD in your account.');
				}
				
			}
			else
			{
				alert('Error in processing request.');
			}
		});
    }
    
}

function sync_deposits()
{
	var last_deposit_id=$('#last_deposit_id').val()

	last_deposit_id=parseInt(last_deposit_id);
	
	
	if(!isNaN(last_deposit_id) && last_deposit_id>=0)
	{
		mycontract.methods.deposit_id.call().call().then(function(result){
			if(result)
			{
				
				if(result>last_deposit_id)
				{
					
					mycontract.methods.deposits(last_deposit_id+1).call().then(function(result){
						if(result)
						{
							
							//console.log(result.amount);
							var amt=reverse_amt(result.amount);
							$('#deposit_id').val(last_deposit_id+1);
							$('#deposit_amount').val(amt);
							$('#deposit_member_id').val(result.member_id);


							
							$.ajax({
							url: $('#syncdepositform').attr('action'),
							type: $('#syncdepositform').attr('method'),
							data: new FormData($('#syncdepositform')[0]),
							dataType: 'JSON',
							processData: false,
							contentType: false,
							success: function(data){
								
								if(data.type == 'success'){
								$('#syncdepositform')[0].reset();
								//Swal.fire("Warning", "Do not refresh. We are proceeding your payment.", "warning");
								setTimeout(function(){ document.location.href=document.location.href; }, 1000);
								}else{
								Swal.fire("Warning", "Reload transaction page to sync deposits data.", "warning");
								}
							}
							});
							
						}
						
					});
				}
			}
			
		});	
	}
}