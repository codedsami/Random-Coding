package practice;

public class longestcoMMonPrefix {
	  public static String longestCommonPrefix(String[] strs) {
	        String str= "";
	        for (int i = 0 ; i< strs.length; i++){
	        	for (int j = i+1; j<strs.length; j++) {
	        		
	            if(strs[i].charAt(i)==strs[j].charAt(i)){
	                str = str + strs[i].charAt(i);
	                break;
	            }
	            else if(strs[i].charAt(i)!=strs[j].charAt(i)){
	                break;
	            }
	            
	        	}
	        }
	        return str;
	    }

	public static void main(String[] args) {
		String [] strs = {"flower", "flight", "flow"};
		String [] strss = {"dog", "racecare", "car"};

		System.out.println(longestCommonPrefix(strs));
		System.out.println(longestCommonPrefix(strss));


	}

}
